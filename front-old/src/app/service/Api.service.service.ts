import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class ApiService {
  private apiUrl = 'https://new-hope.ddev.site/api/getAnimalsList'; // URL de l'API Symfony

  constructor(private http: HttpClient) {}

  getHello(): Observable<any> {
    return this.http.get<any>(this.apiUrl);
  }
}
