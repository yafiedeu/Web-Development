<table class="table">
  <thead>
    <tr>
      <th scope="col">Datum</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Betreff</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($messages AS $message): ?>
      <tr>
        <td><?php echo e(date("d.m.Y H:i:s", $message["timestamp"])); ?></td>
        <td><?php echo e($message["name"]); ?></td>
        <td><?php echo e($message["email"]); ?></td>
        <td><?php echo e($message["subject"]); ?></td>
      </tr>
    <?php endforeach; ?> 
  </tbody>
</table>
