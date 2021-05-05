import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import {ProductListComponent} from './product-list/product-list.component'

const routes: Routes = [
  {
    path:'',
    component:ProductListComponent
  },
  {path:'detail/:id',loadChildren:()=>import('../detail/detail.module').then(m=>m.DetailModule)}
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ProductRoutingModule {

}
