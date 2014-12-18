<div class="container">
    <h2>You are in the View: application/view/song/edit.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Edit a song</h3>
        <form action="<?php echo URL; ?>songs/updateTraining" method="POST">
            <label>Dystans</label>
            <input autofocus type="number" name="distance" value="<?php echo htmlspecialchars($training->distance, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Czas</label>
            <input type="time" name="t_time" value="<?php echo htmlspecialchars($training->t_time, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Calories</label>
            <input type="number" name="calories" value="<?php echo htmlspecialchars($training->calories, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="training_id" value="<?php echo htmlspecialchars($training->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_training" value="Update" />
        </form>
    </div>
</div>

