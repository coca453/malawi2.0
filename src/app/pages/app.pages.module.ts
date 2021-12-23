
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { PagesComponent } from './pages.component';



import { SwiperComponent } from '../shared/swiper/swiper.component';

import { HomeComponent } from './home/home.component';
import { AboutUsComponent } from './about-us/about-us.component';
import { ContactComponent } from './contact/contact.component';
import { MalawiAppComponent } from './malawi-app/malawi-app.component';
import { InstagramComponent } from './instagram/instagram.component';
import { SliderComponent } from './slider/slider.component';
import { CommonModule } from '@angular/common';
import { SwiperModule } from 'swiper/angular';




@NgModule({
  declarations: [
    PagesComponent,
    SwiperComponent,
    HomeComponent,
    SliderComponent,
    AboutUsComponent,
    ContactComponent,
    MalawiAppComponent,
    InstagramComponent
  ],
  imports: [
    BrowserModule,
    CommonModule,
    SwiperModule
  ],
  exports: [PagesComponent],
  providers: [],
})
export class PageModule { }


