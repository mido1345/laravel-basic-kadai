<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel基礎</title>
 </head>
 
 <body>
 <table>
         <tr>
             <th>ID</th>
             <th>タイトル</th>
             <th>本文</th>
             <th>作成日時</th>
             <th>更新日時</th>
         </tr>
         @foreach($posts as $post)
             <tr>
                 <td>{{ $post->id }}</td>
                 <td>{{ $post->title }}</td>
                 <td>{{ $post->content }}</td>
             </tr>            
         @endforeach       
     </table>
 </body>
 
 </html>