import { Component, OnInit, Output, EventEmitter } from '@angular/core';
import { datos } from 'src/resources/datos';
import { Router, ActivatedRoute } from '@angular/router';
import { SharedDataService } from 'src/app/services/shared-data/shared-data.service';
import { HttpClient } from '@angular/common/http';
import { DataTableDirective } from 'angular-datatables';
import { ApiEmbarcacionesService } from 'src/app/services/api/api-embarcaciones.service';
import { Observable, Subject } from 'rxjs';
declare var $: any;
@Component({
  selector: 'app-tabla',
  templateUrl: './tabla.component.html',
  styleUrls: ['./tabla.component.css']
})
export class TablaComponent implements OnInit {



  dtOptions: DataTables.Settings = {};
  // datos = datos.embarcaciones;
  datos: any = [];


  // datos$!: Observable<any>;
  dtTrigger: Subject<any> = new Subject<any>();
  constructor(private router: Router, private activatedRoute: ActivatedRoute, private sharedDataService: SharedDataService, private http: HttpClient, private apiEmbarcacionesService: ApiEmbarcacionesService) {

  }
  navegarAFormulario() {

    this.router.navigate(['../formulario'], { relativeTo: this.activatedRoute, queryParams: { tipo: 'vacio' } })
  }


  someClickHandler(index: number): void {

    const rowData = this.datos[index];
    console.log(rowData);
    this.sharedDataService.setData("embarcacionSeleccionada", rowData);
    this.router.navigate(['/embarcaciones/formulario'], {
      queryParams: { tipo: 'vista' }  // O 'vacio' según tus necesidades
    }); // Si no es con ruta abosulta, no funciona

  }

  ngOnInit(): void {
    this.apiEmbarcacionesService.getAll('embarcaciones').subscribe((data: any) => {
      this.datos = data;

      console.log('Después de la llamada a la API:', this.datos);
      // Notificar a DataTables después de obtener los datos
      // this.dtTrigger.next(data);
    });
    // Configuración de DataTables
    this.dtOptions = {
      pagingType: 'full_numbers',
      pageLength: 10,
      processing: true,
      language: {
        url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
      },
      // rowCallback: (row: Node, data: any[] | Object, index: number) => {
      //   const self = this;
      //   // row.addEventListener('click', () => {
      //   //   self.someClickHandler(index);
      //   // });
      //   $('td', row).off('click');
      //   $('td', row).on('click', () => {
      //     self.someClickHandler(index);
      //   });
      //   return row;
      // }
    };



  }


}
