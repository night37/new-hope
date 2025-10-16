import { Component } from '@angular/core';
import { ApiService } from '../service/Api.service.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrl: './home.component.scss',
})
export class HomeComponent {
  message = '';
  timestamp = 0;

  constructor(private apiService: ApiService) {}

  ngOnInit(): void {
    this.apiService.getHello().subscribe((data: any) => {
      this.message = data.message;
      this.timestamp = data.timestamp;
    });
    console.log(this);
  }
}
