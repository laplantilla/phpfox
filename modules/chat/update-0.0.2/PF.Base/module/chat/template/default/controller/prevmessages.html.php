{if $messages}
	{foreach from=$messages item=message key=index name=messages}
		{if $message.user_id != Phpfox::getUserId()}
			<div class="mail_thread_holder">
				<div class="mail_user_image">
					<a>
						{img user=$message suffix='_50_square' no_link=true}
					</a>
				</div>
			<div class="mail_content">
				<div class="mail_time_stamp">
					{$message.time_stamp|convert_time}
				</div>
				<div class="mail_thread_user">
					<span id="js_user_name_link_profile-{$message.user_id}" class="user_profile_link_span">
						<a href="{url link=''}{$message.user_name}">
							{$message.full_name}
						</a>
					</span>
				</div>
				<div class="mail_text">
					{$message.text|parse}
				</div>
			</div>
		</div>
		{else}
		<div class="mail_thread_holder is_user">
			<div class="mail_user_image">
				<a>
					{img user=$message suffix='_50_square' no_link=true}
				</a>
			</div>
			<div class="mail_content">
				<div class="mail_time_stamp">
					{$message.time_stamp|convert_time}
				</div>
				<div class="mail_thread_user">
					<span id="js_user_name_link_profile-{$message.user_id}" class="user_profile_link_span">
						<a href="{url link=''}{$message.user_name}">
							{$message.full_name}
						</a>
					</span>
				</div>
				<div class="mail_text">
					{$message.text|parse}
				</div>
			</div>
		</div>
		{/if}
	{/foreach}
{else}
	1
{/if}
