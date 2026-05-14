import { Home } from './home/home';
import { Movies } from './movies/movies';
import { Movie } from './movie/movie';
import { Routes } from '@angular/router';
import { AddMovieComponent } from './components/add-movie/add-movie';
import { EditMovie } from './components/edit-movie/edit-movie';

export const routes: Routes = [
  { path: 'home', component: Home },

  { path: 'movies', component: Movies },

  { path: 'movie/:id', component: Movie },

  {
  path: 'add',
  component: AddMovieComponent
},
{
  path: 'edit/:id',
  component: EditMovie
}
];