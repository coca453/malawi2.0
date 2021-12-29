import { Component, OnInit, HostListener } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss'],
  host: { "(window:resize)": "onWindowResize($event)" }
})
export class AppComponent implements OnInit {
  title = 'malawiEgresados';

  //mobile
  isMobile: boolean = false;
  width: number = window.innerWidth;
  height: number = window.innerHeight;
  mobileWidth: number = 760;
  dato: string = "";



  //Scroll
  scrollnumber: number = 0;
  isScrolled = false;
  scroll : boolean = false;
  @HostListener("window:scroll")
  scrollEvent() {
    window.pageYOffset >= 80 ? (this.isScrolled = true) : (this.isScrolled = false);
    this.scrollnumber = window.pageYOffset;
    if (this.scrollnumber > 5) {
      this.scroll = true;
      console.log(this.scroll); 
    } else {
      this.scroll = false;
    }
    console.log(window.pageYOffset);
  }



  ngOnInit(): void {
    this.isMobile = this.width < this.mobileWidth;
    this.scrollEvent();

  }



  onWindowResize(event: { target: { innerWidth: number; innerHeight: number; }; }) {
    this.width = event.target.innerWidth;
    this.height = event.target.innerHeight;
    this.isMobile = this.width < this.mobileWidth;
  }

  constructor() {

  }


}
