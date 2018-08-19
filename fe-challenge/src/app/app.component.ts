import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from '../environments/environment';

@Component({
	selector: 'app-root',
	templateUrl: './app.component.html',
	styleUrls: ['./app.component.css']
})
export class AppComponent {
	public coiso = 'fe-challenge';

	constructor(private http: HttpClient) { }

	public getPosts(uri) {
		this.http.get(`https://jsonplaceholder.typicode.com/${uri}`, {})
			.subscribe(res => console.log(res));
	}
	public post() {		
		this.http.post(`${this.getEnv()}/listner.php`, {
			uri: 'getproducts',
			headers: {
				'content-type': 'application/json'
			},

		})
			.subscribe(res => console.log(res));
	}

	getEnv() {
		if (environment.production) {
			return 'http://ricardolapa.com';
		}
		return 'http://localhost:8012';
	}
}
