
<!DOCTYPE html>
<html>
<head>
<title>Book managment</title>
<!-- library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<!-- library bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
    <div class="container">
        <form action = "/editbook/<?php echo $books[0]->id; ?>" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <table>
                <tr>
                    <td>Naslov</td>
                    <td>
                    <input type = 'text' class="form-control input-sm" name = 'title'value = '<?php echo$books[0]->title; ?>'/> </td>
                    </tr>
                    <tr>
                    <td>Autor</td>
                    <td>
                    <input type = 'text'class="form-control input-sm" name = 'author'value = '<?php echo$books[0]->author; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td>Žanr</td>
                    <td>
                    <select class="form-control @error('genre') is-invalid @enderror" name="genre" id="genre" placeholder="Odaberite žanr">
                        <option value="Drama">Drama</option>
                        <option value="Fantastika">Fantastika</option>
                        <option value="Krimi">Krimi</option>
                        <option value="Ljubavni">Ljubavni</option>
                        <option value="Povijesni">Povijesni</option>
                        <option value="Pustolovni">Pustolovni</option>
                        <option value="Psihološki">Psihološki</option>
                        <option value="Triler">Triler</option>
                        <option value="Vestern">Vestern</option>
                        <option value="Znanstvena fantastika">Znanstvena fantastika</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                    <td>Cijena</td>
                    <td>
                    <input type = 'text'class="form-control input-sm" name = 'price'value = '<?php echo$books[0]->price; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td>Broj stranica</td>
                    <td>
                    <input type = 'text'class="form-control input-sm" name = 'pages'value = '<?php echo$books[0]->pages; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td>Godina izdanja</td>
                    <td>
                    <input type = 'text'class="form-control input-sm" name = 'year'value = '<?php echo$books[0]->year; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td>Link slike</td>
                    <td>
                    <input type = 'text'class="form-control input-sm" name = 'image'value = '<?php echo$books[0]->image; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <br>
                    <td colspan = '2'>
                    <input type = 'submit'class="btn btn-danger" value = "Pohrani promjene" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>