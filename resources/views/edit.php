
<!DOCTYPE html>
<html>
<head>
<title>User managment</title>
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
        <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <table>
                <tr>
                    <td>Ime</td>
                    <td>
                    <input type = 'text' class="form-control input-sm" name = 'name'value = '<?php echo$users[0]->name; ?>'/> </td>
                    </tr>
                    <tr>
                    <td>Prezime</td>
                    <td>
                    <input type = 'text'class="form-control input-sm" name = 'surname'value = '<?php echo$users[0]->surname; ?>'/>
                    </td>
                    </tr>
                    <tr>
                    <td>Uloga</td>
                    <td>
                    <select class="form-control @error('role') is-invalid @enderror" name="role" id="role" placeholder="Odaberite ulogu">
                        <option value="superAdministrator">Super Administrator</option>
                        <option value="administrator">Administrator</option>
                        <option value="korisnik">Korisnik</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                    <td>Email</td>
                    <td>
                    <input type = 'text'class="form-control input-sm" name = 'email'value = '<?php echo$users[0]->email; ?>'/>
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