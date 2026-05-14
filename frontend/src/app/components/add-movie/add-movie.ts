import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { MovieService } from '../../services/movie';
import { RouterLink } from '@angular/router';


@Component({
  selector: 'app-add-movie',
  standalone: true,
  imports: [CommonModule, FormsModule, RouterLink ],
  templateUrl: './add-movie.html',
  styleUrl: './add-movie.css'
})

export class AddMovieComponent {

  movie = {
    title: '',
    synopsis: '',
    year: '',
    cover: ''
  };

  constructor(private movieService: MovieService) {}

  saveMovie() {

    this.movieService.addMovie(this.movie)
    .subscribe({

      next: (data) => {

        alert('Película agregada');
        console.log(data);

      },

      error: (err) => {

        console.log(err);

      }

    });

  }

}