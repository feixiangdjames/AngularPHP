import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-messages-list',
  templateUrl: './home-list.component.html',
  styleUrls: ['./home-list.component.css']
})
export class HomeListComponent implements OnInit {

  categoryList:string[]=['category-A','category-B','category-C'];

  constructor() { }

  ngOnInit(): void {
  }

}
