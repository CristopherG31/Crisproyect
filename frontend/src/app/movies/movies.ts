import { Component, inject } from '@angular/core';
import { RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';
import { ChangeDetectorRef } from '@angular/core';

import { MovieService } from '../services/movie';


@Component({
  selector: 'app-movies',
  standalone: true,
  imports: [RouterLink, CommonModule],
  templateUrl: './movies.html',
  styleUrl: './movies.css',
})
export class Movies {
    movieService = inject(MovieService);

    cdr = inject(ChangeDetectorRef);

  movies: any[] = [];

constructor() {

  this.movieService.getMovies().subscribe((data: any) => {

    console.log('DATA COMPLETA:', data);

    this.movies = data;

    this.cdr.detectChanges();

  });

}
deleteMovie(id:number){

  this.movieService.deleteMovie(id)
  .subscribe({

    next:(data)=>{

      alert('Película eliminada');

      this.movies = this.movies.filter(
        movie => movie.id !== id
      );

      this.cdr.detectChanges();

    },

    error:(err)=>{

      console.log(err);

    }

  });

}
}