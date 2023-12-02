let sidepanelBtns = document.querySelectorAll('.sidepanel_btn');
let adminSections = document.querySelectorAll('.admin-section');

sidepanelBtns.forEach((btn)=>{
    btn.onclick = function(){
        let sectionId = btn.getAttribute('data-section');
        
        adminSections.forEach(section=>{
            let blockId = section.getAttribute('id');
            if(sectionId === blockId){
                section.classList.remove('hide-section');
            } else{
                section.classList.add('hide-section');
            }
        });
    }
});

let categoryLogoInput = document.querySelector('#category-logo-input');
    categoryLogoInput.addEventListener("change", function(){
        let result = categoryLogoInput.files[0].type;
        if( result != 'image/svg+xml'){
            alert ('Не правильный формат файла. \n Необходимо применять формат SVG!');
            categoryLogoInput.value = '';
        }
    });

