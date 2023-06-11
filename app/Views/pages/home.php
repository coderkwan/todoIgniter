<div class="flex gap-[5rem]">

	<form action="/create" method="post" class="flex flex-col items-start gap-3 w-full max-w-md">
		<?=csrf_field()?>
		<label class="font-bold" for="todo">What are planning on doing?</label>
		<input type="text" name="todo" placeholder="write code" class="p-2 w-full rounded text-black">
		<button type="submit" class="btn bg-indigo-500 w-full rounded p-2">Save</button>
	</form>
	<div>
		<div class="flex flex-col gap-2">
			<?php if (!empty($todos) && is_array($todos)): ?>
			<?php foreach ($todos as $todo_item): ?>
			<div class="p-3 rounded border flex items-center justify-between gap-4">
				<h3>
					<?=esc($todo_item['todo'])?>
				</h3>
				<div class="flex gap-2">
					<a href="/edit/<?=esc($todo_item['id'])?>" class="bg-green-500 p-2 rounded">Edit</a>
					<form method='post' action="/delete?id=<?=esc($todo_item['id'])?>">
						<?=csrf_field()?>
						<input type="text" hidden name="id" value="<?=esc($todo_item['id'])?>">
						<button type="submit" class="p-2 bg-red-500 rounded ">Delete</button>
					</form>
				</div>
			</div>
			<?php endforeach?>
			<?php else: ?>
			<h3 class="font-bold text-xl">Your todos will appear here!</h3>
			<?php endif?>
		</div>
	</div>
</div>