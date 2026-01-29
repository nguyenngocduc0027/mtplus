  <div class="sidebar-area" id="sidebar-area">
      <div class="logo position-relative d-flex align-items-center justify-content-between">
          <a href="#" class="d-block text-decoration-none position-relative">
              <img src="{{ asset('backend/images/logo-icon.png') }}" alt="logo-icon">
              <span class="logo-text text-secondary fw-semibold">Fila</span>
          </a>
          <button
              class="sidebar-burger-menu-close bg-transparent py-3 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
              id="sidebar-burger-menu-close">
              <span class="border-1 d-block for-dark-burger"
                  style="border-bottom: 1px solid #475569; height: 1px; width: 25px; transform: rotate(45deg);"></span>
              <span class="border-1 d-block for-dark-burger"
                  style="border-bottom: 1px solid #475569; height: 1px; width: 25px; transform: rotate(-45deg);"></span>
          </button>
          <button class="sidebar-burger-menu bg-transparent p-0 border-0" id="sidebar-burger-menu">
              <span class="border-1 d-block for-dark-burger"
                  style="border-bottom: 1px solid #475569; height: 1px; width: 25px;"></span>
              <span class="border-1 d-block for-dark-burger"
                  style="border-bottom: 1px solid #475569; height: 1px; width: 25px; margin: 6px 0;"></span>
              <span class="border-1 d-block for-dark-burger"
                  style="border-bottom: 1px solid #475569; height: 1px; width: 25px;"></span>
          </button>
      </div>

      <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
          <ul class="menu-inner">
              <li class="menu-title small text-uppercase">
                  <span class="menu-title-text">MAIN</span>
              </li>
              <li class="menu-item open">
                  <a href="javascript:void(0);" class="menu-link menu-toggle active">
                      <span class="material-symbols-outlined menu-icon">dashboard</span>
                      <span class="title">Dashboard</span>
                      <span class="count">11</span>
                  </a>

                  <ul class="menu-sub">
                      <li class="menu-item">
                          <a href="index.html" class="menu-link active">
                              E-Commerce
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="crm.html" class="menu-link">
                              CRM
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="project-management.html" class="menu-link">
                              Project Management
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="lms.html" class="menu-link">
                              LMS
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="help-desk.html" class="menu-link">
                              Help Desk
                              <span class="new tag">Hot</span>
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="hr-management.html" class="menu-link">
                              HR Management
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="school.html" class="menu-link">
                              School
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="marketing.html" class="menu-link">
                              Marketing
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="analytics.html" class="menu-link">
                              Analytics
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="hospital.html" class="menu-link">
                              Hospital
                          </a>
                      </li>
                      <li class="menu-item">
                          <a href="finance.html" class="menu-link">
                              Finance
                          </a>
                      </li>
                  </ul>
              </li>

              <li class="menu-item">
                  <a href="{{ route('admin.services.index') }}" class="menu-link">
                      <span class="material-symbols-outlined menu-icon">ballot</span>
                      <span class="title">Dịch vụ</span>
                  </a>
              </li>




              <li class="menu-item">
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="menu-link btn"> <span
                              class="material-symbols-outlined menu-icon">logout</span>
                          <span class="title">Logout</span></button>
                  </form>

              </li>
          </ul>
      </aside>
  </div>
