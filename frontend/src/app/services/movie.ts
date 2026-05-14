import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})

export class MovieService {

  private apiUrl = 'http://127.0.0.1:8000/api/movies';

  constructor(private http: HttpClient) {}

  // OBTENER PELÍCULAS
  getMovies(): Observable<any> {

    return this.http.get(this.apiUrl);

  }

  // AGREGAR PELÍCULA
  addMovie(movie:any): Observable<any> {

    return this.http.post(this.apiUrl, movie);

  }

  // ACTUALIZAR PELÍCULA
  updateMovie(id:number, movie:any): Observable<any> {

    return this.http.put(`${this.apiUrl}/${id}`, movie);

  }

  // ELIMINAR PELÍCULA
  deleteMovie(id:number): Observable<any> {

    return this.http.delete(`${this.apiUrl}/${id}`);

  }

}