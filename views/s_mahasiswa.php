<?php
session_start();
include '../api/koneksi.php';
include '../api/verif_mahasiswa.php';

// Ambil NID dosen dari session
$dospem = $_SESSION['id_dosen']; // NID dosen pembimbing yang diambil dari session

// Query untuk mengambil data profil dosen berdasarkan NID
$query = "SELECT d.id, d.nama, d.nid, d.fakultas, d.profile 
          FROM dosen d 
          WHERE d.nid = '$dospem'";
$result = mysqli_query($conn, $query);

// Periksa apakah data ditemukan
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Data dosen
    $nama = $row['nama'];
    $nid = $row['nid'];
    $fakultas = $row['fakultas'];
    $profilePath = $row['profile']; // Path profil
} else {
    die("Data dosen tidak ditemukan.");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Skripsi</title>
    <link rel="shortcut icon" href="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/favicon/1644289115/favicon%20leads.png"> <!-- Icon Leads -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootsrap -->
    <link rel="stylesheet" type="text/css" href="../assets/css/s_mahasiswa.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Icon pada kalender -->
    <script src="../assets/js/script_kalendar.js" defer></script>
</head>
<body>
  <nav>
    <a href="../index.php">
      <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="logo upn">
    </a>
    <button type="button" class="settings btn btn-secondary btn-sm">Primary</button>
    <a href="">
      <button type="button" class="meeting btn btn-primary btn-sm ">Start Meeting</button>
    </a>
  </nav>
  <aside>
    <div class="profile">
      <img src="../assets/uploads/default-profile.jpeg" alt="Profile Dosen">
    </div>
    <div class="biodata">
      Informationns
    </div>
    <!-- KALENDER -->
    <div class="kalender">
        <div class="wrapper">
            <header>
                <p class="current-date">December2024</p>
                <div class="icons">
                    <span id="prev" class="material-icons">chevron_left</span>
                    <span id="next" class="material-icons">chevron_right</span>
                    </div>
            </header>
          <div class="calendar">
            <ul class="weeks">
              <li>Sun</li>
              <li>Mon</li>
              <li>Tue</li>
              <li>Wed</li>
              <li>Thu</li>
              <li>Fri</li>
              <li>Sat</li>
            </ul>
            <ul class="days"></ul>
        </div>
      </div>
    </div>
  </aside>
  <main>
    <h1>Hello world</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, est quasi. Rem iusto consequatur voluptatum nisi ex eligendi id odit eum quaerat accusantium. Reiciendis culpa ipsa incidunt dignissimos perspiciatis rem nesciunt odit, quidem laborum qui quae! Excepturi quaerat officia, enim sit beatae tempora accusamus, debitis iste deserunt inventore repellat, perspiciatis iure. Fuga cum iste, commodi illum ex placeat accusantium consequuntur natus quibusdam odio cumque, sequi numquam ab nisi libero? Maiores, magni provident? Iste cumque tempore est et velit in qui! Eaque, ab, reprehenderit recusandae optio inventore sed cupiditate alias sint temporibus esse nesciunt explicabo ipsum eveniet, possimus quia. Totam perferendis saepe dolorem cum. Quo minus rerum, commodi tenetur optio explicabo rem fuga aliquam totam in illum nulla exercitationem nisi fugiat! Quidem blanditiis enim optio explicabo nemo veritatis a velit itaque nam minima sunt, autem, temporibus molestias ab, animi quis ipsa consectetur ducimus praesentium sed veniam expedita. Necessitatibus repellendus placeat doloremque rem? Incidunt qui obcaecati harum cum unde, quas illo provident? Distinctio eius quia nostrum aspernatur ipsum suscipit tempore dicta illo similique! Quisquam nisi iusto eveniet natus culpa, qui esse nobis maiores illum repellendus? Sapiente odit culpa nulla autem totam dolore deserunt, earum itaque, in odio saepe quidem dignissimos iste ducimus tenetur reiciendis fugit numquam? Iure impedit repellendus cumque neque magni voluptatem qui nesciunt doloremque? Explicabo, officia unde perferendis ad, dicta, dolorem soluta tempora dignissimos consectetur dolores quo rem! Recusandae officia ipsum earum neque facere optio illo molestias nobis perferendis, voluptatem ab libero nemo! Accusantium possimus modi numquam eius exercitationem maxime ab commodi quia molestias. Tempora, commodi? Voluptas tempora quis quos. Molestiae recusandae minus ea totam exercitationem sit necessitatibus nesciunt soluta eaque eum architecto, odio dolor velit deleniti mollitia sequi quam ipsum unde excepturi sed quae. Corrupti qui eaque dolorem officia odit assumenda? Dolor, ea! Iusto excepturi consectetur doloremque sit enim rem laborum facilis officiis quibusdam laudantium nam reiciendis accusamus corporis, magnam nemo dolorum temporibus pariatur ea obcaecati nisi? Amet ab magni, facilis voluptas magnam nulla obcaecati quo explicabo officiis tempora! Laudantium, eaque assumenda? Dolores, deserunt consequatur! Nisi libero itaque optio! Amet natus deleniti aliquid soluta delectus iste debitis vitae sunt minima? Nesciunt rerum odio nihil adipisci voluptatibus velit facere recusandae saepe pariatur explicabo amet doloremque cum itaque aperiam ex ipsa dolor sunt, quam magni soluta ipsum assumenda excepturi fuga. Iusto esse doloremque ut ipsam deleniti adipisci perspiciatis reprehenderit tempore eaque placeat rerum quod aut incidunt fuga quas quibusdam accusantium, impedit alias laboriosam quos ad corrupti in reiciendis? Reiciendis ratione tenetur in iure ipsum doloribus, aspernatur molestias a dicta! Magnam rerum molestias asperiores necessitatibus omnis mollitia sed at, aut modi itaque minima culpa, corporis id! Facere sunt odit deleniti omnis dolorum blanditiis nostrum saepe sequi. Suscipit sed debitis quas laboriosam autem totam odio excepturi ex est? Excepturi, ullam a accusamus quis odit voluptatibus consectetur. Quia ad minus aspernatur deserunt atque maxime delectus esse voluptas quas est perferendis magnam odio dolor recusandae adipisci quisquam quae beatae placeat, eaque a nam sunt non! Dolorem eos deleniti esse ut eligendi est dolor minima porro magnam tenetur dolore corporis, ipsam sint, odio quas impedit tempora voluptate quibusdam nihil ea itaque rem ducimus consequuntur. Dignissimos, beatae. Accusamus, laudantium quidem libero sit, error id minima accusantium illo aut cupiditate odio consequatur dolorum quis voluptatibus numquam possimus. Debitis doloremque accusantium dicta quasi doloribus fugiat, veritatis, sapiente quod repellendus aspernatur unde? Impedit laboriosam, sint doloremque corrupti veritatis magnam praesentium ducimus sed consequatur quaerat molestiae rem deleniti in delectus cum nihil quia fugit ullam amet ipsum nulla consectetur maiores voluptatum architecto. Modi, ipsum voluptas. Saepe assumenda temporibus beatae veritatis quia corrupti quam aliquid libero architecto sed, ducimus a ipsam aliquam iure nostrum est unde deleniti veniam quibusdam. Consectetur commodi alias omnis voluptatibus atque optio beatae amet, nulla inventore! Temporibus dicta modi eligendi ipsa accusamus distinctio amet praesentium obcaecati quidem, error a non perferendis nisi alias tenetur eum eaque. A natus error debitis atque eos numquam in necessitatibus aspernatur cupiditate. Perferendis magnam quae fugiat quod maxime ex inventore aperiam dolor quas earum consectetur, soluta accusantium eligendi placeat doloremque ut aut eos laborum amet, praesentium est suscipit! Doloremque incidunt ex molestias possimus iste architecto sint tenetur animi est et adipisci fuga modi quidem culpa doloribus, amet quo ipsum earum dolore? Laudantium officiis, at, excepturi nemo quibusdam ipsa quaerat pariatur ipsum nobis quos, assumenda nulla corrupti itaque. Voluptatum sit qui quaerat nam est illum expedita veniam vel nobis sequi, ipsa excepturi laborum, tempore ad. Molestiae nesciunt veritatis quod nam distinctio, reprehenderit quam accusamus modi reiciendis pariatur iure exercitationem laudantium, et sapiente unde accusantium quos rem, iste quo consectetur magni vel neque recusandae odio! Laborum, autem, aperiam quibusdam voluptate et praesentium quaerat, modi nesciunt enim facilis libero ad dolorem eius delectus. Ipsum numquam odit aperiam magni veniam consequuntur laboriosam vitae esse ut, nostrum, tempore eveniet error et repudiandae labore quibusdam eum quasi ipsa laudantium in illo. Dolore magnam ipsum debitis doloremque, culpa officia itaque eos nisi neque hic! Perferendis blanditiis dolore molestias ea tempora. Aspernatur culpa voluptates ducimus cum, magni ea! Debitis quam repudiandae delectus. Dolor deserunt distinctio itaque unde perferendis impedit reprehenderit dignissimos repudiandae, maiores voluptatem a quas dolores voluptate at cum ducimus vero officiis aliquam! Vitae quam voluptatem iste obcaecati aperiam, debitis cupiditate rerum accusantium ipsum facilis voluptate deserunt nemo minima. Facilis distinctio dolorem consectetur, maxime minus tempora unde aliquam dolores in mollitia animi minima cupiditate iure sed quos, recusandae iste modi quis. Eveniet veniam iste repellendus natus minus quisquam nemo aliquam esse exercitationem quidem magni explicabo eos, id, maxime assumenda fuga quas delectus ut omnis quasi dolores minima nostrum ipsa dolore! Temporibus nostrum maxime eaque ratione, eveniet sit totam recusandae possimus iusto, earum soluta vitae quas? Molestias excepturi dolor nemo in eum ut neque pariatur, ea corporis sint quae dignissimos inventore obcaecati fugiat voluptatum enim sequi natus illum laborum molestiae? Consequatur aliquid quibusdam delectus qui laudantium quod minus! Quos corrupti eveniet non repudiandae odit. Aut possimus eum ipsa illum eaque atque in maiores? Suscipit eveniet dicta corporis omnis, consequuntur commodi dolores, architecto quas veritatis ullam beatae aliquam ad enim, molestiae dolor magnam eaque laborum sit eos illo praesentium mollitia vitae porro? Dolores eaque voluptates aspernatur quod? Accusantium ex laboriosam et cupiditate nobis delectus ratione eius! Itaque tempora omnis sit? Reiciendis animi repellendus provident tenetur sint eveniet dolore quod fugiat, quasi ad ut porro nulla, quis amet? Nobis eius consectetur tempore laborum nesciunt id ullam pariatur minus, eos incidunt ad ipsam doloremque similique dolorem, voluptates illo tenetur beatae harum aliquam. Voluptatem aperiam odit nulla porro eveniet. Ducimus modi dolores doloribus necessitatibus ipsum totam cupiditate libero reiciendis ullam praesentium iusto maiores nisi quod quia, quis explicabo voluptatibus blanditiis recusandae ut iste est ipsam laborum accusamus? Ipsum numquam sapiente ipsa natus ipsam ducimus quae quasi ratione. Accusamus, vero labore provident dicta minima error, accusantium nesciunt maxime tempora quidem delectus eveniet ut ducimus quas nulla. Adipisci ipsam dolorum eos, tenetur distinctio pariatur officiis ab cum beatae a culpa eum ducimus maxime est explicabo magni, laboriosam nobis totam numquam quia eligendi impedit dolor porro iure? Asperiores aliquam sit rerum quas odio voluptates id, culpa est fugit reiciendis obcaecati et, dignissimos corporis iste ut consequatur dolorum illum officia similique atque distinctio odit. Placeat debitis, natus, nesciunt rerum quo ea dolorum architecto neque odio ratione, aliquid accusantium. Ducimus hic quisquam consequatur id ipsam reiciendis incidunt, libero porro? Repudiandae laboriosam qui fugit quae asperiores illo, officiis saepe eaque laborum fugiat accusamus corporis aperiam itaque mollitia magni magnam vel pariatur perspiciatis non omnis odit. Fuga voluptate inventore veritatis atque error blanditiis reprehenderit, eum cumque commodi quisquam vitae voluptates quo velit, hic placeat, qui eius libero maiores iure accusamus tempore quas dolore? Sunt ipsam distinctio assumenda excepturi neque nostrum, rem dicta, pariatur minus similique amet vero hic? Tenetur nam architecto odio expedita, dignissimos non deserunt quibusdam nostrum minima fuga. Eaque quam cumque aliquid laboriosam. Incidunt aspernatur iste, adipisci ipsum, ipsam voluptate alias officiis perferendis saepe impedit laudantium quae ad debitis eveniet quasi corporis facilis fugit. Earum sequi facilis itaque asperiores, voluptas at, dicta numquam fugiat reprehenderit nisi expedita placeat, repellendus eos. Beatae ipsam suscipit consequuntur exercitationem rerum laborum, accusantium sunt dolore earum velit nobis eos quisquam a, iste repellat libero quos vitae, nulla ipsa architecto impedit fugit nam eligendi aliquam. A quis, qui voluptatum harum aspernatur, numquam, dolor iusto eius consequatur similique nobis cum dignissimos tempora assumenda excepturi aliquam quod laboriosam sunt laborum voluptates aliquid dolores! Dicta obcaecati assumenda fugit perspiciatis veritatis, blanditiis placeat minima quod accusantium veniam deserunt, soluta nobis reiciendis recusandae tempora magni. Aperiam maiores ab, voluptas beatae incidunt aspernatur amet tempore obcaecati libero necessitatibus voluptate modi natus fugiat quod. Unde iste deserunt voluptas ducimus earum voluptatibus quia. Quam repellat consectetur atque quod libero qui deleniti, quibusdam magni animi a sit, ab quo dolorum quia ipsa, voluptatum hic cupiditate totam praesentium ipsam dolore! Magni cum architecto ipsam, ut, rerum ullam, ab repellat temporibus voluptates officiis saepe maiores fugit iusto illum commodi accusamus debitis totam corporis soluta sequi sint? Hic at, alias id a nisi quod quaerat facere, vel reprehenderit incidunt, ut asperiores recusandae. Fugiat perspiciatis earum soluta repellendus rerum aspernatur aliquam nam officiis eum reprehenderit accusantium necessitatibus facere excepturi modi quae dolores optio, quidem placeat eius cupiditate quas aliquid dolor mollitia impedit. Fuga et atque reiciendis quaerat mollitia est, beatae voluptatum. Vel delectus repellendus repudiandae, quod dolorem nisi. Architecto sapiente reprehenderit velit delectus neque amet magnam saepe sed aliquam possimus, eveniet autem nostrum quia numquam et culpa nam in dicta repellendus? Blanditiis sequi quidem doloribus quaerat iste? Voluptates incidunt amet earum rem modi saepe fugiat architecto officia quibusdam sint, magnam, sapiente ullam consequuntur voluptas aperiam sit eligendi repellendus veritatis quis praesentium beatae alias minus possimus? Nam maiores itaque culpa, natus tempora vero saepe quaerat suscipit, possimus, corporis iste repellat quibusdam quo. Nobis distinctio, tempore eius neque tenetur, omnis dolorem quaerat odio sunt accusantium repellat est! Sapiente excepturi dolores tempore temporibus, expedita soluta commodi non eos nisi error omnis quam. Esse quasi odit veniam exercitationem possimus illo. Repellendus minus ipsa quisquam voluptatem provident? Id in tenetur tempore beatae quibusdam alias inventore, odit sapiente blanditiis, accusamus a est laborum ab similique sunt voluptates praesentium maiores perspiciatis officiis ut natus fugiat. Exercitationem quod rem nostrum maiores, doloribus harum tempore delectus vero quo suscipit laudantium commodi autem porro natus eius ratione, cupiditate ut ab temporibus repudiandae iste. Iusto quod repudiandae nemo impedit dolor. Pariatur, accusantium voluptas assumenda non nam vitae sunt eos, repellendus ipsa quo tempora unde possimus officia consequuntur corrupti ad? Doloremque ullam labore hic sed corrupti pariatur eligendi, rerum nulla quisquam corporis ipsum quaerat officia alias excepturi atque dignissimos animi assumenda. Iure laboriosam quos atque magnam ipsum eum illo, modi tempora earum, esse a. Animi, consequatur esse nobis accusantium et dolore pariatur porro amet excepturi quisquam incidunt praesentium molestiae deserunt delectus omnis, magni debitis alias aut sapiente culpa totam vero temporibus eius ipsam? Enim molestiae temporibus pariatur quod blanditiis reiciendis vero veniam, voluptate laborum eos, culpa sed. Itaque optio ea libero excepturi aliquam? Amet laborum expedita quo officia? Esse doloremque voluptate praesentium adipisci maiores dolorem magni libero molestiae, consequatur ipsum. Corporis ut eaque temporibus ipsa necessitatibus minima doloremque alias, ab, corrupti sit ad? Ea maiores nostrum tenetur error, aliquam iusto consequatur reiciendis dignissimos ut amet aliquid adipisci labore recusandae voluptas doloremque a similique fugiat expedita provident aspernatur numquam voluptates repellat quam! Tempora beatae quo molestias consectetur, dicta dolorum suscipit ducimus modi veritatis delectus voluptatibus. Neque excepturi voluptatem delectus minima sunt molestiae, voluptatum molestias, perferendis ipsum pariatur eveniet modi inventore, nemo amet dignissimos suscipit ullam maiores aperiam nisi dolorem sequi soluta labore! Perspiciatis, eos saepe hic consequatur dolor ad enim eaque deserunt fuga? Vitae ducimus neque nostrum illo nam modi quibusdam, quae dolor est totam.</p>
    <!-- Modal untuk Tambah Event -->
    <div id="event-modal" class="modal">
      <div class="modal-content">
        <form id="event-form">
          <div class="mb-3">
            <input type="text" class="form-control" id="event-title" placeholder="Judul" required >
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="Tanggal Mulai" class="form-label">Tanggal Mulai:</label>
              <input type="datetime-local" class="form-control" id="start-date" required>
            </div>
            <div class="col-md-6">
              <label for="Tanggal Selesai" class="form-label">Tanggal Selesai:</label>
              <input type="datetime-local" class="form-control" id="end-date" required>
            </div>
          </div><br>
          <div class="input-group">
            <span class="input-group-text">Deskripsi:</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
          <button type="submit" class="btn btn_submit btn-primary">Submit</button>
          <button type="button" class="close btn btn_submit btn-secondary">cancel</button>
        </form>
      </div>
    </div>
  </main>
</body>
</html>
