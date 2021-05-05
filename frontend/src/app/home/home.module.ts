import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { HomeRoutingModule } from './home-routing.module';
import { HomeListComponent } from './home-list/home-list.component';
import { MatSidenavModule } from "@angular/material/sidenav";
//swiper
import { SwiperComponent } from "../swiper/swiper.component";
import { MatListModule } from "@angular/material/list";
import { SwiperModule } from "swiper/angular";

import {FormsModule} from "@angular/forms";
import {MatCardModule} from '@angular/material/card';

@NgModule({
  declarations: [HomeListComponent,
    SwiperComponent],
  imports: [
    CommonModule,
    HomeRoutingModule,
    MatSidenavModule,
    MatListModule,
    MatCardModule,

    //swiper
    SwiperModule,
    FormsModule
  ]
})
export class HomeModule { }
