<head>
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Pelanggan</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nh-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<p>Cari Data Pelanggan :</p>
	<form action="/pelanggan0211/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pelanggan .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

<body>
    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                  
                      <th>Id </th> 
                      <th>Id_pelanggan</th>
                      
                      <th>Id_barang</th>
                     
                     
                  </tr>
              </thead>
              <tbody>
                
                @foreach ($transaksi as $Transaksi)
                  <tr>
                      
                      <td>{{ $Transaksi->id }}</td>
                      
                      <td>{{ $Transaksi->nama}}</td>
                      <td>{{ $Transaksi->alamat }}</td>
                      
                    
                      
                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
</body>