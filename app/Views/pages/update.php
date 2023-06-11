<div class="flex gap-[5rem]">
	<?php

if (is_array($todos) && !empty($todos)) {
	foreach ($todos as $d) {
		?>
			<div class="flex flex-col gap-3 w-2/4">
				<form action="/update" method="post" class="flex flex-col items-start gap-3 w-full">
					<?=csrf_field()?>
					<label class="font-bold" for="todo">Edit your todo!</label>
					<input type="text" name="todo" value="<?=esc($d['todo'])?>" placeholder="write code" class="p-2 w-full rounded text-black">
					<input type="text" hidden name="id" value="<?=esc($d['id'])?>">
					<button type="submit" class="btn bg-indigo-500 w-full rounded p-2">Save</button>
				</form>
				<form class="w-full" method='post' action="/delete?id=<?=esc($d['id'])?>">
					<?=csrf_field()?>
					<input type="text" hidden name="id" value="<?=esc($d['id'])?>">
					<button type="submit" class="p-2 w-full bg-red-500 rounded ">Delete</button>
				</form>
			</div>

		<?php

	}
} else {
	?>
		<p>Sorry but nothing to do!</p>
	<?php
}

?>
</div>