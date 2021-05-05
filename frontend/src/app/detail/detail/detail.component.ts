import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
//@ts-ignore
import  * as alldata from '../../../assets/pets.json';

@Component({
  selector: 'app-detail',
  templateUrl: './detail.component.html',
  styleUrls: ['./detail.component.css']
})

export class DetailComponent implements OnInit {
  num:number=1;
  detail:any;
  price:number=0;
  constructor(private route:ActivatedRoute) {

  }

   add():void{
    this.num++;
     this.detail.price=this.price*this.num
  }
  remove():void{
   if(this.num>1) {this.num--;
     this.detail.price=this.price*this.num
   }
  }
  ngOnInit(): void {
    this.route.params.subscribe(params=>
    {
      this.detail=alldata.default.filter((item:any)=>item.id==params.id)['0']
      this.price=this.detail.price;
    })
  }

}
