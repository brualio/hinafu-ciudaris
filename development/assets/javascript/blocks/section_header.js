document.addEventListener("DOMContentLoaded", () => {
    // Header sidebar
    let MainHeader = document.querySelector('.main--header');
    let MainSidebar = document.querySelector('.main--sidebar');
    let sidebarOverlay = document.querySelector('.sidebar--overlay');
    let sidebarOpen = document.querySelector('.sidebar--open');
    let sidebarClose = document.querySelector('.sidebar--close');
  
    const OpenSidebar = e => {
      if (MainSidebar) {
        MainSidebar.classList.add('---show');
        MainSidebar.classList.add('---animate');
      }
      if (MainHeader) {
        
        MainHeader.classList.add('---show');
      }
      if (sidebarOverlay) {
        sidebarOverlay.classList.add('---show');
      }
    }
  
    const CloseSidebar = e => {
      if (MainSidebar) {
        MainSidebar.classList.remove('---show');
        MainSidebar.classList.remove('---animate');
      }
      if (MainHeader) {
        MainHeader.classList.remove('---show');
      }
      if (sidebarOverlay) {
        sidebarOverlay.classList.remove('---show');
      }
    }
  
    if (sidebarOpen) {
      sidebarOpen.addEventListener('click', e => {
        OpenSidebar();
      });
    }
  
    if (sidebarClose) {
      sidebarClose.addEventListener('click', e => {
        CloseSidebar();
      });
    }
  
    if (sidebarOverlay) {
      sidebarOverlay.addEventListener('click', e => {
        CloseSidebar();
      });
    }
  
    // Scrolling
    window.onscroll = () => {
      if (MainHeader) {
        if (window.scrollY > 0) {
          MainHeader.classList.add('---scrolling');
        } else {
          MainHeader.classList.remove('---scrolling');
        }
      }
    };

    //sidebar
    acordionFunction('.menu--service > a','height',true,1)

  });
  