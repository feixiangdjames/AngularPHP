import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
/*import {ProductListComponent} from './product/product-list/product-list.component'

import {HomeListComponent} from './home/home-list/home-list.component'*/
const routes: Routes = [
  {path:'',loadChildren:()=>import('./home/home.module').then(m=>m.HomeModule)},
  {path:'product/:id',
    loadChildren:()=>import('./product/product.module').then(m=>m.ProductModule)

  },
  {path:'detail/:id',loadChildren:()=>import('./detail/detail.module').then(m=>m.DetailModule)},
 /* {path:'product',component:ProductListComponent}*/
  ]
@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule {

}
/*
* (routes, {onSameUrlNavigation: 'reload'}*/
