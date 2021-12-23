
import { Component, OnInit } from '@angular/core';

import SwiperCore, { Autoplay, Pagination, Navigation } from 'swiper';

SwiperCore.use([Autoplay, Pagination, Navigation]);


@Component({
  selector: 'app-swiper',
  templateUrl: './swiper.component.html',
  styleUrls: ['./swiper.component.scss']
})
export class SwiperComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }
 
  onSlideChange() {
    console.log('slide change');
  }

}
