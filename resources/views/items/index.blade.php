<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 30px;
        }

        .user-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .user-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-left: auto;
            margin-right: auto;
        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .user-card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        p {
            margin: 10px 0;
            font-size: 14px;
            color: #555;
        }

        strong {
            color: #333;
        }

        @media (max-width: 768px) {
            .user-list {
                flex-direction: column;
                align-items: center;
            }
        }
        .border{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <h1>Daftar Nama Barang</h1>

    {{-- <div class="user-list">
        @foreach ($posts as $post)
            <div class="user-card">
                <img src="{{ $post['image'] }}">
                <p><strong>Nama:</strong> {{ $post['title'] }}</p>
                <p><strong>Institusi:</strong> {{ $post['content'] }}</p>
                <p><strong>Dibuat:</strong> {{ $post['created_at'] }}</p>
                <p><strong>Diperbarui:</strong> {{ $post['updated_at'] }}</p>
            </div>
        @endforeach
    </div> --}}
    <table class="user-card">
        <thead>
            <tr>
                <td class="border">Nama Barang</td>
                <td class="border">Harga</td>
                <td class="border">Qty</td>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td class="border">
                    {{$item["nama_barang"]}}
                </td>
                <td class="border">
                    {{$item["harga"]}}
                </td>
                <td class="border">
                    {{$item["qty"]}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>