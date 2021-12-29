import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})
export class NavbarComponent implements OnInit {

  @Input('scrollEvent') scroll : number = 0;
  scrolled : boolean = false;

  constructor() { }

  ngOnInit(): void {
  }
  ngOnChanges(): void {
    console.log('scroll: ' + this.scroll);  
    if (this.scroll > 5){
      this.scrolled = true;
    }else{
      this.scrolled = false;
    }
  }



}
