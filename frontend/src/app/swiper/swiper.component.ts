import { Component, OnInit } from '@angular/core';
// import Swiper core and required components
import SwiperCore,{Navigation, Pagination, Scrollbar, A11y,Autoplay} from 'swiper/core';

SwiperCore.use([Navigation, Pagination, Scrollbar,A11y,Autoplay]);

@Component({
  selector: 'app-swiper',
  templateUrl: './swiper.component.html',
  styleUrls: ['./swiper.component.css']
})

export class SwiperComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }
  onSwiper(swiper:String):void{
    console.log(swiper);
  }
  onSlideChange():void{
    console.log('slide change');
  }
}
