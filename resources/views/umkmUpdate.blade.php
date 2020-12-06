<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/regis.css')}}" />
    <title>Edit UMKM</title>
</head>
<body>
    <h1 class="headings">Edit UMKM</h1>
    <div class="form-container">
        <form action="{{route('updateUmkm', ['id' => $umkmUpdate->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="owner" value="{{$umkmUpdate->owner}}" class="form-control" placeholder="Enter name" />
                
            </div>
            <div class="form-group">
                <label for="dob">Tanggal lahir</label>
                <input type="date" name="dob" value="{{$umkmUpdate->dob}}" class="form-control" />
                
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" value="{{$umkmUpdate->email}}" class="form-control" placeholder="Enter email" />
                
            </div>
            <div class="form-group">
                <label for="ktp">Nomor KTP</label>
                <input
                    type="number"
                    name="idNumber"
                    value="{{$umkmUpdate->idNumber}}"
                    class="form-control"
                    placeholder="Enter your ID Number"
                />
                
            </div>
            <div class="form-group">
                <label for="nama-umkm">Nama UMKM</label>
                <input
                    type="text"
                    name="title"
                    value="{{$umkmUpdate->title}}"
                    class="form-control"
                    placeholder="Enter UMKM name"
                />
                
            </div>
            <div class="form-group">
                <label for="nama-umkm">Bidang bisnis yang dilakunan</label>
                <input
                    type="text"
                    name="field"
                    value="{{$umkmUpdate->field}}"
                    class="form-control"
                    placeholder="UMKM anda bergerak di bidang..."
                />
                
            </div>
            <div class="form-group">
                <label for="desc">Deskripsi singkat</label>
                <input
                    type="text"
                    name="description"
                    value="{{$umkmUpdate->description}}"
                    class="form-control"
                />
                
            </div>
            <div class="form-group">
                <label for="no-wa">Nomor WhatsApp</label>
                <input
                    type="number"
                    name="number"
                    value="{{$umkmUpdate->number}}"
                    class="form-control"
                    placeholder="Enter your WhatsApp number"
                />
                
            </div>
            <div class="form-group">
                <label for="no-wa">Verified</label>
                <input
                    name="verified"
                    value="{{$umkmUpdate->verified}}"
                    class="form-control"
                />
                
            </div>
            <button type="submit" class="button">Submit</button>
        </form>
    </div>
    <img src="{{asset('storage/assets/regis-upper.svg')}}" alt="decors" class="upper-ornament" />
    <img src="{{asset('storage/assets/regis-lower.svg')}}" alt="decors" class="lower-ornament" />
</body>

    <script>
        let kecamatan = [
        { id: "310101", nama: "Kepulauan Seribu Utara" },
        { id: "310102", nama: "Kepulauan Seribu Selatan." },
        { id: "317101", nama: "Gambir" },
        { id: "317102", nama: "Sawah Besar" },
        { id: "317103", nama: "Kemayoran" },
        { id: "317104", nama: "Senen" },
        { id: "317105", nama: "Cempaka Putih" },
        { id: "317106", nama: "Menteng" },
        { id: "317107", nama: "Tanah Abang" },
        { id: "317108", nama: "Johar Baru" },
        { id: "317201", nama: "Penjaringan" },
        { id: "317202", nama: "Tanjung Priok" },
        { id: "317203", nama: "Koja" },
        { id: "317204", nama: "Cilincing" },
        { id: "317205", nama: "Pademangan" },
        { id: "317206", nama: "Kelapa Gading" },
        { id: "317301", nama: "Cengkareng" },
        { id: "317302", nama: "Grogol Petamburan" },
        { id: "317303", nama: "Taman Sari" },
        { id: "317304", nama: "Tambora" },
        { id: "317305", nama: "Kebon Jeruk" },
        { id: "317306", nama: "Kalideres" },
        { id: "317307", nama: "Pal Merah" },
        { id: "317308", nama: "Kembangan" },
        { id: "317401", nama: "Tebet" },
        { id: "317402", nama: "Setiabudi" },
        { id: "317403", nama: "Mampang Prapatan" },
        { id: "317404", nama: "Pasar Minggu" },
        { id: "317405", nama: "Kebayoran Lama" },
        { id: "317406", nama: "Cilandak" },
        { id: "317407", nama: "Kebayoran Baru" },
        { id: "317408", nama: "Pancoran" },
        { id: "317409", nama: "Jagakarsa" },
        { id: "317410", nama: "Pesanggrahan" },
        { id: "317501", nama: "Matraman" },
        { id: "317502", nama: "Pulogadung" },
        { id: "317503", nama: "Jatinegara" },
        { id: "317504", nama: "Kramatjati" },
        { id: "317505", nama: "Pasar Rebo" },
        { id: "317506", nama: "Cakung" },
        { id: "317507", nama: "Duren Sawit" },
        { id: "317508", nama: "Makasar" },
        { id: "317509", nama: "Ciracas" },
        { id: "317510", nama: "Cipayung" },
        ];

        let dropdown = document.getElementById("dropdown-kecamatan");
        dropdown.length = 0;

        let defaultOption = document.createElement("option");
        defaultOption.text = "Choose Kecamatan";

        dropdown.add(defaultOption);
        dropdown.selectedIndex = 0;

        for (let i = 0; i < kecamatan.length; i++) {
        option = document.createElement('option');
        option.text = kecamatan[i].nama;
        option.value = kecamatan[i].nama;
        dropdown.add(option);
        }


    </script>

    <script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"
    ></script>
</html>
