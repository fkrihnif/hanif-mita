<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Link
            </div>
            <div class="card-body">
                <label for="">Nama Tamu</label>
                <input type="text" class="form-control" id="guest" name="guest" autofocus onfocus="this.value=''" >
                <!-- <button onclick="document.getElementById('guest').value = ''">Clear input field</button> -->
                
                <a href="javascript:void(0)" id="create" class="btn btn-primary btn-sm mt-1 mb-1">Create</a>

                <div id="description">
                Assalamu’alaikum Wr. Wb. <br>
                Bismillahirrahmanirrahim <br>

                Yth. <div id="namaTamu"></div> <br>

                Tanpa mengurangi rasa hormat, perkenankan kami mengundang bapak/ibu/saudara/i untuk menghadiri acara pernikahan kami: <br>
                ♥️ Muhammad Fikri Hanif & Tara Kamita Riduana ♥️ <br><br>

                Untuk selengkapnya mengenai info undangan dapat mengujungi link berikut : <br>

                <div id="linkUndangan"></div> <br>

                Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu dalam acara pernikahan kami. <br>

                Terimakasih banyak atas perhatiannya <br>
                Wassalamu’alaikum Wr. Wb.
                </div>


                <br>
                <button id="button1" onclick="CopyToClipboard('description')" class="btn btn-success btn-sm">Click to copy desc</button>

            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

      <script>
      var str = "Dr. Yus Sholva, S.T., M.T. / istri";
      var newString = str.replace(/\s/g, '+');
      
      $('body').on('click', '#create', function () {
    
        var guest = document.getElementById('guest').value;
        var guestDecode = guest.replace(/\s/g, '+');

        document.getElementById("namaTamu").innerHTML = guest;

        var link = "https://hi.weddingkita.id/fikri-tara/?to=";
        
        var linkFinal = link.concat(guestDecode);

        document.getElementById("linkUndangan").innerHTML = linkFinal;

        });
  

        function CopyToClipboard(id){
        var r = document.createRange();
        r.selectNode(document.getElementById(id));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(r);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
        alert('Success Copy!')
        }

      </script>
  </body>
</html>
