import { Component, OnInit } from '@angular/core';
import {ActivatedRoute,NavigationExtras,Router} from "@angular/router";
import {ApiService} from '../../api.service';
//@ts-ignore
import  * as alldata from '../../../assets/pets.json';

interface grade{
  name:string;
  black:boolean;
}
interface detailCard{
  id:number;
  title: string;
  price:number;
  category:string;
  commit: string;
  imgUrl:string;
  rate:grade[];
};

@Component({
  selector: 'app-orders-list',
  templateUrl: './product-list.component.html',
  styleUrls: ['./product-list.component.css']
})

export class ProductListComponent implements OnInit {

  options:string[]=['from low to high','from high to low'];

  allDetails:detailCard[]=[];

  details: detailCard[]=[];

  keepDetails:any[]=[];

  constructor(private route: ActivatedRoute,
              private apiService:ApiService) {
    this.allDetails=alldata.default;
  }

  sort():void{
    const obj:HTMLBaseElement|null=document.querySelector('#select');
    //met a bug
    setTimeout(()=>{
      if(obj&&obj.textContent){
      let order=this.options.indexOf(obj.textContent)===0?1:-1;
      if(this.details){
      this.details.sort((a:detailCard,b:detailCard)=>(a.price-b.price)*order)}
      }
    },0);
  }


   priceFilter(...arg:string[]):void{
      this.details=this.keepDetails.filter((item:any):boolean=>{
      let max=!arg[1]?1<<20:arg[1];
      let min=!arg[0]?0:arg[0];
      return item['price']>=min && item['price']<=max;
    }
  )
}



  rateFilter(option:number):void{
    //@ts-ignore
    this.details=this.keepDetails.filter(item=>{
      const oneRateNum:[]=item['rate'].filter((item: { black: any;})=>
      {return !item.black})
      //return the prodect who rateStar number greater than option.
      return oneRateNum.length>=option
      }
    )

  }

  myFilter(option:string,data:string):void{
    this.keepDetails=this.details=this.allDetails.filter(item=>{
      //@ts-ignore
      return item[option].search(data)>-1
    })
  }

  ngOnInit():void {

    //subsecribe the router params
    this.route.params.subscribe(params =>
    {
      console.log(params);
      const searchData:string=params['id'];
      searchData[0]==="?"
        ?this.myFilter('title',searchData.substr(1))
        :this.myFilter('category',searchData)
     })
  }

}
