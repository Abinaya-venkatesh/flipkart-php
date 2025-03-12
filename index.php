<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>   
</head>
<style>
    .container {
        max-width: 600px;
        margin: 50px auto;
        text-align: center;
    }
    h2 {
        margin-bottom: 20px;
    }

    .search-container {
        position: relative;
        text-align: left;
    }

    #searchInput {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
    }

    #searchResults {
        position: absolute;
        top: calc(100% + 10px);
        left: 0;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        z-index: 1;
        display: none;
        max-height: 200px;
        overflow-y: auto;
    }

    .product-item {
        padding: 10px;
        border-bottom: 1px solid #eee;
        cursor: pointer;
    }

    .product-item img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
        vertical-align: middle;
    }

    .product-item p {
        display: inline-block;
        margin: 0;
    }

</style>
<body>
   
    <div class="container">
    <h2>Product Search</h2>
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search for products...">
        <div id="searchResults"></div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#searchInput').on('input', function() {
        var query = $(this).val().trim();
        if (query !== '') {
            $.ajax({
                url: 'search.php',
                type: 'POST',
                data: {query: query},
                success: function(data) {
                    $('#searchResults').html(data).show();
                }
            });
        } else {
            $('#searchResults').empty().hide();
        }
    });

    $(document).on('click', '.product-item', function() {
        var productName = $(this).text();
        $('#searchInput').val(productName);
        $('#searchResults').empty().hide();
    });
});
</script>
</html>