<div class="header">
<h2><?php e(t("Create Room")) ?></h2>

<?php if ( $dura['error'] ) : ?>
<div>
<?php echo $dura['error'] ?>
</div>
<?php endif ?>

<form action="#" method="post">
<table>
<tr>
<td><?php e(t("Room Name")) ?></td>
<td><input type="textbox" name="name" value="<?php echo $dura['input']['name'] ?>" size="20" maxlength="10" /></td>
</tr>
<tr>
<td><?php e(t("Max Members")) ?></td>
<td>
<select name="limit">
<?php for ( $i = $dura['user_min']; $i <= $dura['user_max']; $i++ ): ?>
<option value="<?php echo $i ?>"<?php if ($dura['input']['limit'] == $i ) : ?> selected="selected"<?php endif ?>><?php echo $i ?></option>
<?php endfor ?>
</select><?php e(t("{1} members", '')) ?>
</td>
</tr>
<tr>
<td><?php e(t("Language")) ?></td>
<td>
<select name="language">
<?php foreach ( $dura['languages'] as $langcode => $language ): ?>
<option value="<?php e($langcode) ?>"<?php if ($langcode == Dura::user()->getLanguage() ) : ?> selected="selected"<?php endif ?>><?php e($language) ?></option>
<?php endforeach ?>
</select>
</td>
</tr>
<tr>
<td></td>
<td>
<span class="button">
<input type="submit" name="submit" value="CREATE!" class="input" />
</span>
</td>
</tr>
</table>

</form>

<p><?php e(t("Up to {1} rooms can be created.", DURA_ROOM_LIMIT)) ?></p>
</div><!-- /#header -->
