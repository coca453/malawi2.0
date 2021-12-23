import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MalawiAppComponent } from './malawi-app.component';

describe('MalawiAppComponent', () => {
  let component: MalawiAppComponent;
  let fixture: ComponentFixture<MalawiAppComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MalawiAppComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MalawiAppComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
