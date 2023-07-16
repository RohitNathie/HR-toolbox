(() => {
  
    document.querySelector('#navbarSideCollapse').addEventListener('click', () => {
      document.querySelector('.offcanvas-collapse').classList.toggle('open')
    })

    document.querySelector('#navbarSideCollapse2').addEventListener('click', () => {
        document.querySelector('.offcanvas-collapse').classList.toggle('open')
      })
  })();