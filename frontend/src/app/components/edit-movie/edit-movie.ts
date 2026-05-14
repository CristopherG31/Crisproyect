import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute } from '@angular/router';
import { MovieService } from '../../services/movie';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-edit-movie',
  standalone: true,
  imports: [CommonModule, FormsModule, RouterLink],
  templateUrl: './edit-movie.html',
  styleUrl: './edit-movie.css'
})

export class EditMovie implements OnInit {

  movie:any = {

    title: '',
    synopsis: '',
    year: '',
    cover: ''

  };

  id:any;

  constructor(
    private route: ActivatedRoute,
    private movieService: MovieService
  ) {}

  ngOnInit(): void {

    this.id = this.route.snapshot.paramMap.get('id');

    this.movieService.getMovies()
    .subscribe((data:any)=>{

      this.movie = data.find(
        (movie:any) => movie.id == this.id
      );

    });

  }

  updateMovie(){

    this.movieService.updateMovie(this.id, this.movie)
    .subscribe({

      next:(data)=>{

        alert('Película actualizada');

        console.log(data);

      },

      error:(err)=>{

        console.log(err);

      }

    });

  }

}