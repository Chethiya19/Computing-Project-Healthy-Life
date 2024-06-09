

function showProductItems(){  
    $.ajax({
        url:"./adminView/viewAllProducts.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showCategory(){  
    $.ajax({
        url:"./adminView/viewCategories.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showCustomers(){
    $.ajax({
        url:"./adminView/viewCustomers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showUserformdetails(){
    $.ajax({
        url:"./adminView/viewUserformdetails.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showDeliveryBoys(){  
    $.ajax({
        url:"./adminView/viewDeliveryBoys.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showOrders(){
    $.ajax({
        url:"./adminView/viewAllOrders.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showFoodSchedules(){  
    $.ajax({
        url:"./adminView/viewFoodSchedules.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function ChangeOrderStatus(id){
    $.ajax({
       url:"./controller/updateOrderStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Order Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}

function ChangePay(id){
    $.ajax({
       url:"./controller/updatePayStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Payment Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}

//add product data
function addItems(){
    var p_name=$('#p_name').val();
    var p_desc=$('#p_desc').val();
    var p_price=$('#p_price').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('p_name', p_name);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('category', category);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}

//edit product data
function itemEditForm(id){
    $.ajax({
        url:"./adminView/editItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update product after submit
function updateItems(){
    var product_id = $('#product_id').val();
    var p_name = $('#p_name').val();
    var p_desc = $('#p_desc').val();
    var p_price = $('#p_price').val();
    var category = $('#category').val();
    var existingImage = $('#existingImage').val();
    var newImage = $('#newImage')[0].files[0];
    var fd = new FormData();
    fd.append('product_id', product_id);
    fd.append('p_name', p_name);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('category', category);
    fd.append('existingImage', existingImage);
    fd.append('newImage', newImage);
   
    $.ajax({
      url:'./controller/updateItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showProductItems();
      }
    });
}

//delete product data
function itemDelete(id){
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}


//delete cart data
function cartDelete(id){
    $.ajax({
        url:"./controller/deleteCartController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Cart Item Successfully deleted');
            $('form').trigger('reset');
            showMyCart();
        }
    });
}

function eachDetailsForm(id){
    $.ajax({
        url:"./view/viewEachDetails.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}



//delete category data
function categoryDelete(id){
    $.ajax({
        url:"./controller/catDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Category Successfully deleted');
            $('form').trigger('reset');
            showCategory();
        }
    });
}


function search(id){
    $.ajax({
        url:"./controller/searchController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.eachCategoryProducts').html(data);
        }
    });
}

//add delivery boy data
function addDeliveryboy(){
    var f_name=$('#f_name').val();
    var l_name=$('#l_name').val();
    var email=$('#email').val();
    var phone_number=$('#phone_number').val();
    var address=$('#address').val();
    var vehicle_number=$('#vehicle_number').val();

    var fd = new FormData();
    fd.append('f_name', f_name);
    fd.append('l_name', l_name);
    fd.append('email', email);
    fd.append('phone_number', phone_number);
    fd.append('address', address);
    fd.append('vehicle_number', vehicle_number);
    $.ajax({
        url:"./controller/addDeliveryBoyController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Delivery Boy Added successfully.');
            $('form').trigger('reset');
            showDeliveryBoys();
        }
    });
}

//edit product data
function DeliveryboyEditForm(id){
    $.ajax({
        url:"./adminView/editdeliveryboyform.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update delivery boy data
function updateDeliveryBoy(){
    var f_name=$('#f_name').val();
    var l_name=$('#l_name').val();
    var email=$('#email').val();
    var phone_number=$('#phone_number').val();
    var address=$('#address').val();
    var vehicle_number=$('#vehicle_number').val();

    var fd = new FormData();
    fd.append('f_name', f_name);
    fd.append('l_name', l_name);
    fd.append('email', email);
    fd.append('phone_number', phone_number);
    fd.append('address', address);
    fd.append('vehicle_number', vehicle_number);
    $.ajax({
        url:"./controller/updateDeliveryBoyController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Delivery Boy Updated successfully.');
            $('form').trigger('reset');
            showDeliveryBoys();
        }
    });
}

//delete delivery boy data
function DeliveryboyDelete(id){
    $.ajax({
        url:"./controller/deleteDeliveryBoysController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Delivery Boy Successfully deleted');
            $('form').trigger('reset');
            showDeliveryBoys();
        }
    });
}


//add Food Schedule data
function addFSDiabetes() {
    var breakfast = $('#breakfast').val();
    var lunch = $('#lunch').val();
    var dinner = $('#dinner').val();
    var instructions = $('#instructions').val();

    var fd = new FormData();
    fd.append('breakfast', breakfast);
    fd.append('lunch', lunch);
    fd.append('dinner', dinner);
    fd.append('instructions', instructions);

    $.ajax({
        url: "./controller/addFS-DiabetesController.php.php",
        method: "post",
        data: data,
        success: function (response) {
            alert('Food schedule added successfully.');
            $('form').trigger('reset');
            showFoodSchedules();
        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText);
            alert('Error adding food schedule. Please try again.');
        }
    });
}







function showDiabetes(){
    $.ajax({
        url:"./adminView/viewFS-Diabetes.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showPressure(){
    $.ajax({
        url:"./adminView/viewFS-Pressure.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showCholestero(){
    $.ajax({
        url:"./adminView/viewFS-Cholesterol.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//delete Food schedule for Diabete 
function deleteFSDiabetes(id){
    $.ajax({
        url:"./controller/deleteFS-DiabetesController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Food schedule for Diabete Successfully deleted');
            $('form').trigger('reset');
            showDiabetes();
        }
    });
}