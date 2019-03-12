<div>
		<h1>Abra uma conta</h1>
		<p><strong>É gratuito e sempre será.</strong></p>
		<form method="" target="_blank" onsubmit="try {return window.confirm(&quot;Este formulário talvez não funcione corretamente devido a certas restrições de segurança.\nQuer continuar?&quot;);} catch (e) {return false;}">
			<input type="text" name="nome">
			<input type="text" name="sobrenome">
			<br><br>
			<input type="text" name="cadastro">
			<br><br>
			<input type="text" name="cadastro">
			<br><br>
			<input type="password">
			<br><br>
			<label><strong>Aniversário</strong></label>
			<br><br>
			<select name="dia">
				<option>Dia</option>
				<?php for($i=1;$i<=31; $i++){?>
                                <option><?php echo $i ?></option>
                                <?php } ?>
                             
                                        
                                
			</select>
			<select name="mes">
				<option>Mês</option>
				<option>jan</option>
				<option>fev</option>
				<option>mar</option>
				<option>abr</option>
				<option>mai</option>
				<option>jun</option>
				<option>jul</option>
				<option>ago</option>
				<option>set</option>
				<option>out</option>
				<option>nov</option>
				<option>dez</option>
			</select>
			<select name="ano">
				
			</select>
			Por que preciso informar minha data de nascimento?
			<br><br>
			<input type="radio" name="sexo">
			<label>Feminino</label>
			<input type="radio" name="sexo">
			<label>Masculino</label>
			<br>
			<p>Ao clicar em Abrir uma conta, você concorda com os nossos <br>
			Termos e que leu a nossa Política de Dados, incluindo o nosso <br>
			Uso de Cookies</p>
			<br>
			<button type="submit">Abrir uma conta</button>
		</form>
	</div>
</body></html>