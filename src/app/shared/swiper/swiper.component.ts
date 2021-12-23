
import { Component, OnInit, ViewEncapsulation } from '@angular/core';

import SwiperCore, { Autoplay, Pagination, Navigation } from 'swiper';

SwiperCore.use([Autoplay, Pagination, Navigation]);


@Component({
  selector: 'app-swiper',
  templateUrl: './swiper.component.html',
  styleUrls: ['./swiper.component.scss'],
  encapsulation: ViewEncapsulation.None
})
export class SwiperComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }
 
  onSlideChange() {
    console.log('slide change');
  }

}
