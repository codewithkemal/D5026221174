<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <script>
        function validateForm()
        {
            console.log("Ini baris 14");
            //return false; // dimanapun ketemu return, akan exit function.
            //perintah bawahnya tidak dijalankan
            console.log("Ini baris 17");
            return true; //dlm 1 function, bisa ad lbih dri 1 return
            console.log("Ini baris 19");
        }

        function validate()
        {
            var bill1 = document.getElementById("bill1");
            var bill2 = document.getElementById("bill2");
            var nrp = document.getElementById("nrp");
                //a=1
                //mangeak==true
            //if ((bill1.value && bill2.value) === "") // isiannya lupa ga diisi
            //if (bill1.value == "" && bill2.value == "") // isiannya lupa ga diisi
            if (bill1.value == "")
            {
                alert("Bilangan 1 harus diisi");
                bill1.placeholder("Harus berisi angka");
                bill1.focus();
                return false
            }
            if (bill2.value == "")
            {
                alert("Bilangan 2 harus diisi");
                bill2.placeholder("Harus berisi angka");
                bill2.focus();
                return false
            }
            if (nrp.value == "")
            {
                alert("Bilangan 2 harus diisi");
                nrp.placeholder("Harus berisi angka");
                nrp.focus();
                return false;
            }
            if (nrp.value == "")
            {
                alert("NRP harus diisi");
                nrp.placeholder = "Isi NRP mu disini!";
                return false;
            }
            if (isNaN(nrp.value)) {
                alert("NRP harus berupa angka");
                nrp.value = "";
                nrp.focus();
                return false;
            }
            if (nrp.value.length != 10)
            {
                alert("NRP harus 10 karakter");
                nrp.value = "";
                nrp.focus();
                return false;
            }
            /* {
                alert("Bilangan 1 dan 2 harus diisi");
                return false;
            } else if (bill1.value === "")
            {
                alert("Bilangan 1 harus diisi coy");
                return false;
            } else if (bill2.value === "") {
                alert("Bilangan 2 harus diisi");
                return false;
            }
            {
                    return true;
            } */
            } else
                return true;

    </script>
</head>

<body>
    <div class="container"></div>
    <form action="https://www.google.com" method="get" onsubmit="return validate();">
        <div class="form-group">
            <label for="bill1">Bilangan 1 :</label>
            <input type="number" id="bill1" class="form-control">
        </div>
        <div class="form-group">
            <label for="bill2">Bilangan 2 :</label>
            <input type="number" id="bill2" class="form-control">
        </div>
        <div class="form-group">
            <label for="nrp">NRP :</label>
            <input type="text" id="nrp" class="form-control">
        </div>

        <input type="submit" value="KIRIM" class="btn btn-primary">
    </form>
</body>

</html>
