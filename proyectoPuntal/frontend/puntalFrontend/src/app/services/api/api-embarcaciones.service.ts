import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, tap } from 'rxjs';


@Injectable({
  providedIn: 'root'
})
export class ApiEmbarcacionesService {
  private apiUrl = 'http://127.0.0.1:8000/api/embarcaciones';
  constructor(private http: HttpClient) { }
  getEmbarcaciones(): Observable<any> {
    return this.http.get(this.apiUrl);
  }
  addEmbarcacion(embarcacionData: any): Observable<any> {
    return this.http.post(this.apiUrl, embarcacionData)
      .pipe(
        tap(response => console.log('Respuesta del servicio:', response))
      );
  }

  updateEmbarcacion(id: string, embarcacionData: any): Observable<any> {

    
    const url = `${this.apiUrl}/${id}`;
    console.log('URL:', url);
    console.log('Datos de la embarcación a enviar:', embarcacionData);
    // return this.http.put(url, JSON.stringify(embarcacionData), { headers: new HttpHeaders({ 'Content-Type': 'application/json' }) });
    return this.http.put(url, embarcacionData, { headers: new HttpHeaders({ 'Content-Type': 'application/json' }) });
  }

  deleteEmbarcacion(id: number): Observable<any> {
    const url = `${this.apiUrl}/${id}`;
    return this.http.delete(url);
  }
}
