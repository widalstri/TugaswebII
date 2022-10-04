<html>
    <head>
        <title>Tugas Web Dua</title>
    </head>
    <style>
        body {
            background-color: #00FA9A;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .form {
            display: flex;
            justify-content: center;
            margin-top: 3rem;
        }

        form {
            background: #0000CD;
            border-radius: 2rem;
            padding: 2rem;
        }

        input[type=text] {
            box-sizing: border-box;
            color: white;
            width: 100%;
            padding: 2px 0.7rem;
            font-size: 12pt;
            border: none;
            border-bottom: solid 2px #C71585;
            background-color: transparent;
            transition: 0.5s;
        }

        input[type=text]:focus {
            border: none;
            border-bottom: solid 2px white;
            outline: none;
        }

        textarea {
            background: transparent;
            border: solid 2px #C71585;
            padding: 0.5rem 0.7rem;
            transition: 0.5s;
            border-radius: 4px;
            width: 100%;
            color: white;
            font-size: 12pt;
            resize:vertical
        }

        textarea:focus {
            border: solid 2px white;
            outline: none;
        }

        select {
            border: none;
            background-color: #C71585;
            color: white;
            border-radius: 4px;
            font-size: 12pt;
            padding: 0.5rem 0.7rem;
        }

        button[type=button] {
            background-color: #C71585;
            font-size: 12pt;
            padding: 0.5rem;
            border-radius: 4px;
            border: solid 2px transparent;
            color: White;
            cursor: pointer;
        }
        button[type=button]:focus {
            border: solid 2px white;
        }

        tr {
            height: 2.5rem;
        }
    </style>
    <body>
       <div class="form">
           <form action="tugaswebbiodata.php" method='post'>
               <table>
                    <tr>
                        <td colspan="3" align="center"><b>Profil Diri</b></td>
                    </tr>
                   <tr>
                       <td>Masukkan NIM Anda</td>
                       <td>:</td>
                       <td><input type='text' name='nim'></td>
                   </tr>
                   <tr>
                       <td>Masukkan Nama</td>
                       <td>:</td>
                       <td><input type='text' name='nama'></td>
                   </tr>
                   <tr>
                       <td>Masukkan Gender</td>
                       <td>:</td>
                       <td>
                           <input type='radio' name='gender' id='laki-laki' value='Laki-laki'> <label for='laki-laki'>Laki-laki</label> 
                           <input type='radio' name='gender' id='wanita' value='Wanita'> <label for='wanita'>Wanita</label>
                        </td>
                   </tr>
                   <tr>
                        <td>Masukkan Status</td>
                        <td>:</td>
                        <td>
                            <select name='status'>
                                <option value='Belum Menikah'>Belum menikah</option>
                                <option value='Menikah'>Menikah</option> 
                            </select>
                        </td>
                   </tr>
                   <tr>
                       <td>Masukkan no HP</td>
                       <td>:</td>
                       <td><input type='text' name='tlpn'></td>
                   </tr>
                   <tr>
                       <td>Masukkan Alamat</td>
                       <td>:</td>
                       <td><textarea name='alamat'></textarea></td>
                   </tr>
                   <tr> 
                    <td></td>
                    <td><button type="button" onclick="alert('Success Anda Telah Berhasil Login')">Simpan</button>
                    <button type="button" onclick="alert('Data Anda Kurang Lengkap Mohon Periksa Kembali')">Kembali</button></td>
                </tr>
               </table>
           </form>
       </div> 
    </body>
</html>