<div class="message_box">
<div class="message_box_inner">
<form action="#" method="post" id="message">
<!--
<div class="right"><input type="submit" name="logout" value="LOGOUT" /></div>
-->
<ul class="menu">
<li class="setting">&nbsp;</li>
<li class="sound">&nbsp;</li>
<li class="member">&nbsp;</li>
<li class="animation">&nbsp;</li>
<li class="logout"><input type="submit" name="logout" value="LOGOUT" /></li>
<li></li>
</ul>
<h2 id="room_name"><?php e($dura['room']['name']) ?></h2>
<div>
<textarea name="message"></textarea>
</div>
<?php if ( $ret = file_exists(DURA_PATH.'/js/sound.mp3') ) : ?>
<a href="<?php echo DURA_URL ?>/js/sound.mp3" id="sound" class="hide">sound</a>
<?php endif ?>
<div class="submit">
<input type="submit" name="post" value="POST!" />
</div>
<ul id="members" class="hide">
<?php foreach ( $dura['room']['users'] as $user  ) : ?>
<li><?php e($user['name']) ?> <?php if ( $user['id'] == $dura['room']['host'] ) :?><?php e(t("(host)")) ?><?php endif ?></li>
<?php endforeach ?>
</ul>
<ul class="hide">
<li id="user_id"><?php e($dura['user']['id']) ?></li>
<li id="user_name"><?php e($dura['user']['name']) ?></li>
<li id="user_icon"><?php e($dura['user']['icon']) ?></li>
</ul>
</form>

<div id="setting_pannel" class="hide">
<?php e(t("Room Name")) ?> <input type="textbox" name="room_name" value="<?php e($dura['room']['name']) ?>" size="20" maxlength="10" /> <input type="button" name="save" value="<?php e(t("Change")) ?>" /><br />
<hr />
<input type="button" name="handover" value="<?php e(t("Handover host")) ?>" disabled="disabled" />
<input type="button" name="ban" value="<?php e(t("Ban user")) ?>" disabled="disabled" />

<ul id="user_list"></ul>

</div>

</div>
</div><!-- end #header -->

<div id="talks_box">
<div id="talks">
<?php foreach ( $dura['room']['talks'] as $talk ) : ?>
<?php if ( !$talk['uid'] ) : ?>
<div class="talk system" id="<?php e($talk['id']) ?>"><?php e($talk['message']) ?></div>
<?php else: ?>
<dl class="talk <?php e($talk['icon']) ?>" id="<?php e($talk['id']) ?>">
<dt><?php e($talk['name']) ?></dt>
<dd>
	<div class="bubble">
		<p class="body"><?php e($talk['message']) ?></p>
	</div>
</dd>
</dl>
<?php endif ?>
<?php endforeach ?>
</div><!-- /#talks -->
</div><!-- /#talks_box -->
