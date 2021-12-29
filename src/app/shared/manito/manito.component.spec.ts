import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ManitoComponent } from './manito.component';

describe('ManitoComponent', () => {
  let component: ManitoComponent;
  let fixture: ComponentFixture<ManitoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ManitoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ManitoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
