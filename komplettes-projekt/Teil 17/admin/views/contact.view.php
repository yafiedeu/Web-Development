<table class="table">
  <thead>
    <tr>
      <th scope="col">Datum</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Betreff</th>
      <th scope="col">Aktionen</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($messages AS $message): ?>
      <tr>
        <td><?php echo e(date("d.m.Y H:i:s", $message["timestamp"])); ?></td>
        <td><?php echo e($message["name"]); ?></td>
        <td><?php echo e($message["email"]); ?></td>
        <td><?php echo e($message["subject"]); ?></td>
        <td>
          <a href="contact-view.php?id=<?php echo e($message["id"]); ?>">Anzeigen</a>
          <a href="contact-edit.php?id=<?php echo e($message["id"]); ?>">Bearbeiten</a>
        </td>
      </tr>
    <?php endforeach; ?> 
  </tbody>
</table>