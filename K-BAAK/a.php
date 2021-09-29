<?php

include "../build/config/config.php";
?>
 
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

	<table id="example" class="table table-striped table-bordered example" style="width:100%">
                  <thead>
                  <tr>
                    <th>NIP/NPAK</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>JABATAN</th>
                    <th>EMAIL</th>
                    <th>NO HP</th>
                  </tr>
                  </thead>
                  <tbody>
<?php
$user = mysqli_query($koneksi,"SELECT * FROM tb_pegawai");

while ($row = mysqli_fetch_array($user)) {
                    echo "
                    <tr>
                    <td>".$row['nip_npak']."</td>
                    <td>".$row['nama']."</td>
                    <td>".$row['jk']."</td>
                    <td>".$row['jabatan']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['no_hp']."</td>
                    </tr>
                    ";
                }
                
                ?>

            </tbody>

            <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th></th>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th width="18%">Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
    </table>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );

var editor; // use a global for the submit and return data rendering in the examples
 
$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "../php/staff.php",
        table: "#example",
        fields: [ {
                label: "First name:",
                name: "first_name"
            }, {
                label: "Last name:",
                name: "last_name"
            }, {
                label: "Position:",
                name: "position"
            }, {
                label: "Office:",
                name: "office"
            }, {
                label: "Extension:",
                name: "extn"
            }, {
                label: "Start date:",
                name: "start_date",
                type: "datetime"
            }, {
                label: "Salary:",
                name: "salary"
            }
        ]
    } );
 
    // Activate an inline edit on click of a table cell
    $('#example').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
    } );
 
    $('#example').DataTable( {
        dom: "Bfrtip",
        ajax: "../php/staff.php",
        order: [[ 1, 'asc' ]],
        columns: [
            {
                data: null,
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
            },
            { data: "first_name" },
            { data: "last_name" },
            { data: "position" },
            { data: "office" },
            { data: "start_date" },
            { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
        ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );
} );

  </script>