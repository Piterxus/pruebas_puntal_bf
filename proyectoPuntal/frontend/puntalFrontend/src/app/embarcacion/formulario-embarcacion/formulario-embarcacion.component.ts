import { Component, OnInit } from '@angular/core';
import { SharedDataService } from 'src/app/services/shared-data/shared-data.service';
import { ActivatedRoute } from '@angular/router';
import { ApiEmbarcacionesService } from 'src/app/services/api/api-embarcaciones.service';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { catchError } from 'rxjs';
import { error } from 'jquery';
@Component({
  selector: 'app-formulario-embarcacion',
  templateUrl: './formulario-embarcacion.component.html',
  styleUrls: ['./formulario-embarcacion.component.css']
})
export class FormularioEmbarcacionComponent implements OnInit {
  mostrarVacio: boolean = false;
  modoEdicion: boolean = false;
  embarcacionSeleccionada: any = {datos_tecnicos: ''};
  data: any;
  formulario!: FormGroup;
  constructor(private sharedDataService: SharedDataService, private activatedRoute: ActivatedRoute, private apiEmbarcacionesService: ApiEmbarcacionesService, private formBuilder: FormBuilder) {
    this.formulario = this.formBuilder.group({
      // Define tus campos aquí, por ejemplo:
      Matricula: ['', Validators.required],
      Manga: [''],
      Eslora: [''],
      Origen: [''],
      Titular: [''],
      Imagen: [''],
      Numero_Registro: [''],
      Datos_Tecnicos: [''],
      Modelo: [''],
      Nombre: [''],
      Tipo: [''],
      // Otros campos...
    });
   }
  onMostrarFormulario(tipo: string) {
    console.log("onMostrarFormulario:", tipo);
    if (tipo == 'vacio') {
      this.mostrarVacio = true;
    } else {
      this.mostrarVacio = false;
    }
    
  }
  ngOnInit(): void {
        this.activatedRoute.queryParams.subscribe(params => {
      const tipo = params['tipo'];

      // Asigna el valor al booleano
      this.mostrarVacio = tipo === 'vacio';
    });
    console.log("Intentando obtener datos del servicio...");
 
    this.sharedDataService.getData("embarcacionSeleccionada").subscribe(data => {
      console.log("Datos obtenidos del servicio:", data);
      if (data) {
        this.embarcacionSeleccionada = data;
        console.log("Información de la embarcación seleccionada:", this.embarcacionSeleccionada.matricula);
        this.mostrarInformacion();
      }else{
        console.warn("No se obtuvieron datos del servicio");
      }
    });
  }
  activarModoEdicion() {
    this.modoEdicion = true;
  }
  mostrarInformacion() {
    console.log("Información de la embarcación seleccionada:", this.embarcacionSeleccionada);
  }
 
  // guardarEmbarcacion() {
  //   this.apiEmbarcacionesService.addEmbarcacion(this.embarcacionSeleccionada)
  //     .subscribe(
  //       response => {
  //         console.log('Respuesta del servicio en el componente:', response);
  //         // Puedes realizar acciones adicionales después de la inserción
  //       },
  //       error => {
  //         console.error('Error en la solicitud:', error);
  //         // Puedes manejar el error según tus necesidades
  //       }
  //     );
  // }
  // guardarEmbarcacion() {
  //   this.apiEmbarcacionesService.addEmbarcacion(this.embarcacionSeleccionada)
  //     .subscribe(
  //       response => {
  //         console.log('Respuesta del servicio en el componente:', response);
  //         this.formulario.reset();
  //       },
  //       error => {
  //         console.error('Error en la solicitud:', error);
  //         console.log('Mensaje de error:', error.error);
  //       }
  //     );
  // }
  // guardarEmbarcacion() {
  //   console.log('Guardando embarcación:', this.embarcacionSeleccionada)
  //   this.apiEmbarcacionesService.addEmbarcacion(this.embarcacionSeleccionada)
  //     .pipe(
  //       catchError(error => {
  //         console.error('Error en la solicitud:', error);
  //         console.log('Mensaje de error:', error.error);
  //         // Puedes manejar el error según tus necesidades
  //         throw error; // Propagar el error después de manejarlo
  //       })
  //     )
  //     .subscribe(
  //       response => {
  //         console.log('Respuesta del servicio en el componente:', response);
  //         this.formulario.reset();
  //       }
  //     );
  // }
  guardarEmbarcacion() {
    console.log('Guardando embarcación:', this.embarcacionSeleccionada);
    const formulario = document.forms.namedItem("formEmbarcacion") as HTMLFormElement;
    // Accede a los valores del formulario usando document.forms['nombreFormulario']['nombreCampo']
    const nombreValue = formulario['Nombre'].value as HTMLInputElement;
    const matriculaValue = formulario['Matricula'].value as HTMLInputElement;
    const mangaValue = formulario['Manga'].value as HTMLInputElement;
    const esloraValue = formulario['Eslora'].value as HTMLInputElement;
    const origenValue = formulario['Origen'].value as HTMLInputElement;
    const titularValue = formulario['Titular'].value as HTMLInputElement;
    const imagenValue = formulario['Imagen'].value as HTMLInputElement;
    const numeroRegistroValue = formulario['Registro'].value as HTMLInputElement;
    const datosTecnicosValue = formulario['Datos_Tecnicos'].value as HTMLInputElement;
    const modeloValue = formulario['Modelo'].value as HTMLInputElement;
    const tipoValue = formulario['Tipo'].value as HTMLInputElement;
    this.embarcacionSeleccionada = {
      Nombre: nombreValue,
      Matricula: matriculaValue,
      Manga: mangaValue,
      Eslora: esloraValue,
      Origen: origenValue,
      Titular: titularValue,
      Imagen: imagenValue,
      Numero_Registro: numeroRegistroValue,
      Datos_Tecnicos: datosTecnicosValue,
      Modelo: modeloValue,
      Tipo: tipoValue
    };
    // ... y así sucesivamente para otros campos.

    this.apiEmbarcacionesService.addEmbarcacion(this.embarcacionSeleccionada)
      .pipe(
        catchError(error => {
          console.error('Error en la solicitud:', error);
          console.log('Mensaje de error:', error.error);
          throw error;
        })
      )
      .subscribe(
        response => {
          console.log('Respuesta del servicio en el componente:', response);
          // Puedes realizar acciones adicionales después de la inserción
          // this.resetearFormulario();
        }
      );
  }
  actualizarEmbarcacion() {
    // console.log('Actualizando embarcación:', this.embarcacionSeleccionada)
    // const formulario = document.forms.namedItem("formEmbarcacionModificar") as HTMLFormElement;
    // // Accede a los valores del formulario usando document.forms['nombreFormulario']['nombreCampo']
    // const nombreValue = formulario['Nombre'].value as HTMLInputElement;
    // const matriculaValue = formulario['Matricula'].value as HTMLInputElement;
    // const mangaValue = formulario['Manga'].value as HTMLInputElement;
    // const esloraValue = formulario['Eslora'].value as HTMLInputElement;
    // const origenValue = formulario['Origen'].value as HTMLInputElement;
    // const titularValue = formulario['Titular'].value as HTMLInputElement;
    // const imagenValue = formulario['Imagen'].value as HTMLInputElement;
    // const numeroRegistroValue = formulario['Registro'].value as HTMLInputElement;
    // const datosTecnicosValue = formulario['Datos_Tecnicos'].value as HTMLInputElement;
    // const modeloValue = formulario['Modelo'].value as HTMLInputElement;
    // const tipoValue = formulario['Tipo'].value as HTMLInputElement;
    // this.embarcacionSeleccionada = {
    //   Nombre: nombreValue,
    //   Matricula: matriculaValue,
    //   Manga: mangaValue,
    //   Eslora: esloraValue,
    //   Origen: origenValue,
    //   Titular: titularValue,
    //   Imagen: imagenValue,
    //   Numero_Registro: numeroRegistroValue,
    //   Datos_Tecnicos: datosTecnicosValue,
    //   Modelo: modeloValue,
    //   Tipo: tipoValue
    // };
    this.apiEmbarcacionesService.updateEmbarcacion(this.embarcacionSeleccionada.Matricula, this.embarcacionSeleccionada)
      .pipe(
        catchError(error => {
          console.error('Error en la solicitud:', error);
          // Puedes manejar el error según tus necesidades
          throw error; // Propagar el error después de manejarlo
        })
      )
      .subscribe(
        response => {
          console.log('Respuesta del servicio en el componente:', response);
          // this.formulario.reset();
          this.embarcacionSeleccionada = {};
        },
        error => {
          console.error('Error en la solicitud:', error);
        }
      );
  }
  // actualizarEmbarcacion() {
  //   console.log('Actualizando embarcación:', this.embarcacionSeleccionada)
  //   this.apiEmbarcacionesService.updateEmbarcacion(this.embarcacionSeleccionada.Matricula, this.embarcacionSeleccionada)
  //     .subscribe(
  //       response => {
  //         console.log('Respuesta del servicio en el componente:', response);
  //         // this.formulario.reset();
  //         this.embarcacionSeleccionada = {};
  //       },
  //       error => {
  //         console.error('Error en la solicitud:', error);
  //       }
  //     );
  // }
  // actualizarEmbarcacion() {
  //   console.log('Actualizando embarcación:', this.embarcacionSeleccionada)
  //   this.apiEmbarcacionesService.updateEmbarcacion(this.embarcacionSeleccionada.Matricula, this.embarcacionSeleccionada)
  //     .subscribe(
  //       response => {
  //         console.log('Respuesta del servicio en el componente:', response);
  //         // Puedes realizar acciones adicionales después de la actualización
  //       },
  //       error => {
  //         console.error('Error en la solicitud:', error);
  //         // Puedes manejar el error según tus necesidades
  //       }
  //     );
  // }

}
