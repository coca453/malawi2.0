import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss'],
  host: { "(window:resize)" : "onWindowResize($event)"}
})
export class AppComponent implements OnInit {
  title = 'malawiEgresados';
  isMobile: boolean = false;
  width:number = window.innerWidth;
  height:number = window.innerHeight;
  mobileWidth:number  = 760;
  dato : string = "";

  ngOnInit() : void {
      this.isMobile = this.width < this.mobileWidth;
  }


    onWindowResize(event: { target: { innerWidth: number; innerHeight: number; }; }) {
      this.width = event.target.innerWidth;
      this.height = event.target.innerHeight;
      this.isMobile = this.width < this.mobileWidth;
  }

  constructor(){

  }

}
