

function  editProduct(id)
{
    $("#task-save-btn").hide();
    $("#task-delete-btn").show();
    $("#task-update-btn").show();
    
    document.getElementById('task-id').value          = id;
    document.getElementById('task-price').value       = document.getElementById("price"+id).getAttribute('data');
    document.getElementById('task-date').value        = document.getElementById("datetime"+id).getAttribute('data');
    document.getElementById('task-name').value        = document.getElementById("name"+id).getAttribute('data');
    document.getElementById('task-quantity').value    = document.getElementById("quantity"+id).getAttribute('data');
    document.getElementById('task-cat').value    = document.getElementById("category"+id).getAttribute('data');
    document.getElementById('task-description').value = document.getElementById("description"+id).getAttribute('data');
}

function displayButton()
{
    $("#task-save-btn").show();
    $("#task-delete-btn").hide();
    $("#task-update-btn").hide();
    
    document.getElementById('form-task').reset();
}

function showPassword()
{
    var stock = document.getElementById("form2Example22");

    if (stock.type === "password")
        stock.type = "text";
    else 
      stock.type = "password";
}