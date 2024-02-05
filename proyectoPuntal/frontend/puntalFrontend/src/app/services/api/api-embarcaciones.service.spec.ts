import { TestBed } from '@angular/core/testing';

import { ApiEmbarcacionesService } from './api-embarcaciones.service';

describe('ApiEmbarcacionesService', () => {
  let service: ApiEmbarcacionesService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ApiEmbarcacionesService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
