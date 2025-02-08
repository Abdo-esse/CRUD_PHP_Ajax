const addForm=document.getElementById("addUserForm");


// add New user Ajax request 
 addForm.addEventListener('submit', async (e)=>{
    e.preventDefault();

    const formData = new FormData(addForm);
    formData.append("add",1);

    if(!addForm.checkValidity()){
        e.preventDefault();
        e.stopPropagation();
        addForm.classList.add("was-validated");
        return false;

    }else{
        document.getElementById("addUserBtn").value= 'Please Wait ...';
        const data = await fetch('action.php',{
            method:"POST",
            body:formData,
        });
        const response = await data.text();
        console.log(response);
        console.log(formData);
        

    }

 })
