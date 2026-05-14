import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-movie',
  standalone: true,
  templateUrl: './movie.html'
})
export class Movie {

  movieId: string | null = null;
  movieName: string = '';

  movies = [
    { id: '1', name: 'Avengers' },
    { id: '2', name: 'Batman' },
    { id: '3', name: 'Spiderman' }
  ];

  constructor(private route: ActivatedRoute) {
    this.route.paramMap.subscribe(params => {
      this.movieId = params.get('id');

      const movie = this.movies.find(m => m.id === this.movieId);

      this.movieName = movie ? movie.name : 'No encontrada';
    });
  }
}